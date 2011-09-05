<?php
class Controller_Alerts extends Controller_Template {

	public static $types = array(
		'0' => 'On Hold',
		'1' => 'Reminder',
		'2' => 'Notice',
		'3' => 'Urgent',
		'4' => 'Contact Required',
	);
	
	public function action_index()
	{
		$data['alerts'] = Model_Alert::find('all');
		foreach ($data['alerts'] as $alert)
		{
			if (array_key_exists($alert->type, static::$types))
			{
				$alert->type = static::$types[$alert->type];
			}
		}
		$this->template->title = "Alerts";
		$this->template->content = View::factory('alerts/index', $data);

	}
	
	public function action_view($id = null)
	{
		$data['alert'] = Model_Alert::find($id);
		if (array_key_exists($data['alert']->type, static::$types))
		{
			$data['alert']->type = static::$types[$data['alert']->type];
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
				'identifier' => Input::post('identifier'),
				'event_id' => Input::post('event_id'),
				'init' => Input::post('init'),
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

		$this->template->title = "Alerts";
		$this->template->content = View::factory('alerts/create');

	}
	
	public function action_edit($id = null)
	{
		$alert = Model_Alert::find($id);

		if (Input::method() == 'POST')
		{
			$alert->name = Input::post('name');
			$alert->identifier = Input::post('identifier');
			$alert->event_id = Input::post('event_id');
			$alert->init = Input::post('init');
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
