<?php
class Controller_Events extends Controller_Template {
	
	public function action_index()
	{
		$data['events'] = Model_Event::find('all');
		$this->template->title = "Events";
		$this->template->content = View::factory('events/index', $data);

	}
	
	public function action_view($id = null)
	{
		$data['event'] = Model_Event::find($id);
		
		$this->template->title = "Event";
		$this->template->content = View::factory('events/view', $data);

	}
	
	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$event = Model_Event::factory(array(
				'name' => Input::post('name'),
				'identifier' => Input::post('identifier'),
				'starts' => Input::post('starts'),
				'ends' => Input::post('ends'),
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

		$this->template->title = "Events";
		$this->template->content = View::factory('events/create');

	}
	
	public function action_edit($id = null)
	{
		$event = Model_Event::find($id);

		if (Input::method() == 'POST')
		{
			$event->name = Input::post('name');
			$event->identifier = Input::post('identifier');
			$event->starts = Input::post('starts');
			$event->ends = Input::post('ends');
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
