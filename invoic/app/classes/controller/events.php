<?php
class Controller_Events extends Controller_Template {

	public static $select = array(
		'repeat' => array(
			'1' => 'Yes',
			'0' => 'No'
		),
		
		'references' => array(
			'client' => 'Clients',
			'alerts' => 'Alerts'
		)
	);
	
	public function action_index()
	{
		$data['events'] = Model_Event::find('all');
		foreach ($data['events'] as $event)
		{
			if (array_key_exists($event->repeat, static::$select['repeat']))
			{
				$event->repeat = static::$select['repeat'][$event->repeat];
			}
		}
		$this->template->title = "Events";
		$this->template->content = View::factory('events/index', $data);

	}
	
	public function action_view($id = null)
	{
		$data['event'] = Model_Event::find($id);
		if (array_key_exists($data['event']->repeat, static::$select['repeat']))
		{
			$data['event']->repeat = static::$select['repeat'][$data['event']->repeat];
		}
		$this->template->title = "Event";
		$this->template->content = View::factory('events/view', $data);

	}
	
	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$event = Model_Event::factory(array(
				'name' => Input::post('name'),
				'identifier' => \Inflector::friendly_title(Input::post('name'), '-', true),
				'starts' => \Date::create_from_string(Input::post('starts'), 'datepicker')->get_timestamp(),
				'ends' => \Date::create_from_string(Input::post('ends'), 'datepicker')->get_timestamp(),
				'repeat' => Input::post('repeat'),
				'reference' => Input::post('reference'),
				'ref_id' => Input::post('ref_id'),
			));

			if ($event and $event->save())
			{
				Session::set_flash('notice', 'Added event #' . $event->id . '.');

				Response::redirect('events');
			}

			else
			{
				Session::set_flash('notice', 'Could not save event.');
			}
		}
		$this->template->set_global('select', static::$select, false);
		$this->template->title = "Events";
		$this->template->content = View::factory('events/create');

	}
	
	public function action_edit($id = null)
	{
		$event = Model_Event::find($id);
		
		if (Input::method() == 'POST')
		{
			$event->name = Input::post('name');
			$event->identifier = \Inflector::friendly_title(Input::post('name'), '-', true);
			$event->starts = \Date::create_from_string(Input::post('starts'), 'datepicker')->get_timestamp();
			$event->ends = \Date::create_from_string(Input::post('ends'), 'datepicker')->get_timestamp();
			$event->repeat = Input::post('repeat');
			$event->reference = Input::post('reference');
			$event->ref_id = Input::post('ref_id');

			if ($event->save())
			{
				Session::set_flash('notice', 'Updated event #' . $id);

				Response::redirect('events');
			}

			else
			{
				Session::set_flash('notice', 'Could not update event #' . $id);
			}
		}
		
		else
		{
			$this->template->set_global('event', $event, false);
		}
		$this->template->set_global('select', static::$select, false);
		$this->template->title = "Events";
		$this->template->content = View::factory('events/edit');

	}
	
	public function action_delete($id = null)
	{
		if ($event = Model_Event::find($id))
		{
			$event->delete();
			
			Session::set_flash('notice', 'Deleted event #' . $id);
		}

		else
		{
			Session::set_flash('notice', 'Could not delete event #' . $id);
		}

		Response::redirect('events');

	}
	
	
}

/* End of file events.php */
