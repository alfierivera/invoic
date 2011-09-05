<?php
class Controller_Locations extends Controller_Template {
	
	public function action_index()
	{
		$data['locations'] = Model_Location::find('all');
		$this->template->title = "Locations";
		$this->template->content = View::factory('locations/index', $data);

	}
	
	public function action_view($id = null)
	{
		$data['location'] = Model_Location::find($id);
		
		$this->template->title = "Location";
		$this->template->content = View::factory('locations/view', $data);

	}
	
	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$location = Model_Location::factory(array(
				'name' => Input::post('name'),
				'uri' => Input::post('uri'),
			));

			if ($location and $location->save())
			{
				Session::set_flash('notice', 'Added location #' . $location->id . '.');

				Response::redirect('locations');
			}

			else
			{
				Session::set_flash('notice', 'Could not save location.');
			}
		}

		$this->template->title = "Locations";
		$this->template->content = View::factory('locations/create');

	}
	
	public function action_edit($id = null)
	{
		$location = Model_Location::find($id);

		if (Input::method() == 'POST')
		{
			$location->name = Input::post('name');
			$location->uri = Input::post('uri');

			if ($location->save())
			{
				Session::set_flash('notice', 'Updated location #' . $id);

				Response::redirect('locations');
			}

			else
			{
				Session::set_flash('notice', 'Could not update location #' . $id);
			}
		}
		
		else
		{
			$this->template->set_global('location', $location, false);
		}
		
		$this->template->title = "Locations";
		$this->template->content = View::factory('locations/edit');

	}
	
	public function action_delete($id = null)
	{
		if ($location = Model_Location::find($id))
		{
			$location->delete();
			
			Session::set_flash('notice', 'Deleted location #' . $id);
		}

		else
		{
			Session::set_flash('notice', 'Could not delete location #' . $id);
		}

		Response::redirect('locations');

	}
	
	
}

/* End of file locations.php */
