<?php
class Controller_Alerts extends Controller_Template {

	public static $select = array(
		'types' => array(
			'0' => 'On Hold',
			'1' => 'Reminder',
			'2' => 'Notice',
			'3' => 'Urgent',
			'4' => 'Contact Required'
		),
		'enabled' => array(
			'0' => 'No',
			'1' => 'Yes',
		)
	);
	
	public function action_index()
	{
		$data['alerts'] = Model_Alert::find('all');
		foreach ($data['alerts'] as $alert)
		{
			if (array_key_exists($alert->type, static::$select['types']))
			{
				$alert->type = static::$select['types'][$alert->type];
			}
			
			if (array_key_exists($alert->enabled, static::$select['enabled']))
			{
				$alert->enabled = static::$select['enabled'][$alert->enabled];
			}
		}
		$this->template->title = "Alerts";
		$this->template->content = View::factory('alerts/index', $data);

	}
	
	public function action_view($id = null)
	{
		$data['alert'] = Model_Alert::find($id);
		if (array_key_exists($data['alert']->type, static::$select['types']))
		{
			$data['alert']->type = static::$select['types'][$data['alert']->type];
		}
		
		if (array_key_exists($data['alert']->enabled, static::$select['enabled']))
		{
			$data['alert']->enabled = static::$select['enabled'][$data['alert']->enabled];
		}
		$this->template->title = "Alert";
		$this->template->content = View::factory('alerts/view', $data);

	}
	
	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$alert = Model_Alert::factory(array(
				'name' => Input::post('name'),
				'identifier' => \Inflector::friendly_title(Input::post('name'), '-', true),
				'event_id' => Input::post('event_id'),
				'init' => \Date::create_from_string(Input::post('init'), 'datepicker')->get_timestamp(),
				'enabled' => Input::post('enabled'),
				'type' => Input::post('type'),
			));

			if ($alert and $alert->save())
			{
				Session::set_flash('notice', 'Added alert #' . $alert->id . '.');

				Response::redirect('alerts');
			}

			else
			{
				Session::set_flash('notice', 'Could not save alert.');
			}
		}
		$events = Model_Event::find('all');
		foreach ($events as $event)
		{
			$evids[$event->id] = $event->name;
		}		
		static::$select['events'] = $evids;		
		$this->template->set_global('select', static::$select, false);
		$this->template->title = "Alerts";
		$this->template->content = View::factory('alerts/create');

	}
	
	public function action_edit($id = null)
	{
		$alert = Model_Alert::find($id);

		if (Input::method() == 'POST')
		{
			$alert->name = Input::post('name');
			$alert->event_id = Input::post('event_id');
			$alert->init = \Date::create_from_string(Input::post('init'), 'datepicker')->get_timestamp();
			$alert->enabled = Input::post('enabled');
			$alert->type = Input::post('type');
			if ($alert->save())
			{
				Session::set_flash('notice', 'Updated alert #' . $id);

				Response::redirect('alerts');
			}

			else
			{
				Session::set_flash('notice', 'Could not update alert #' . $id);
			}
		}
		
		else
		{
			$this->template->set_global('alert', $alert, false);
		}
		$events = Model_Event::find('all');
		foreach ($events as $event)
		{
			$evids[$event->id] = $event->name;
		}		
		static::$select['events'] = $evids;	
		$this->template->set_global('select', static::$select, false);
		$this->template->title = "Alerts";
		$this->template->content = View::factory('alerts/edit');

	}
	
	public function action_delete($id = null)
	{
		if ($alert = Model_Alert::find($id))
		{
			$alert->delete();
			
			Session::set_flash('notice', 'Deleted alert #' . $id);
		}

		else
		{
			Session::set_flash('notice', 'Could not delete alert #' . $id);
		}

		Response::redirect('alerts');

	}
	
	
}

/* End of file alerts.php */
