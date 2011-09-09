<?php
class Controller_Role_Locations extends Controller_Template {
	
	public function action_index()
	{
		$data['role_locations'] = Model_Role_Location::find('all');
		$this->template->title = "Role_locations";
		$this->template->content = View::factory('role_locations/index', $data);

	}
	
	public function action_view($id = null)
	{
		$data['role_location'] = Model_Role_Location::find($id);
		
		$this->template->title = "Role_location";
		$this->template->content = View::factory('role_locations/view', $data);

	}
	
	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$role_location = Model_Role_Location::factory(array(
				'role_id' => Input::post('role_id'),
				'location_id' => Input::post('location_id'),
			));

			if ($role_location and $role_location->save())
			{
				Session::set_flash('notice', 'Added role_location #' . $role_location->id . '.');

				Response::redirect('role_locations');
			}

			else
			{
				Session::set_flash('notice', 'Could not save role_location.');
			}
		}

		$this->template->title = "Role_Locations";
		$this->template->content = View::factory('role_locations/create');

	}
	
	public function action_edit($id = null)
	{
		$role_location = Model_Role_Location::find($id);

		if (Input::method() == 'POST')
		{
			$role_location->role_id = Input::post('role_id');
			$role_location->location_id = Input::post('location_id');

			if ($role_location->save())
			{
				Session::set_flash('notice', 'Updated role_location #' . $id);

				Response::redirect('role_locations');
			}

			else
			{
				Session::set_flash('notice', 'Could not update role_location #' . $id);
			}
		}
		
		else
		{
			$this->template->set_global('role_location', $role_location, false);
		}
		
		$this->template->title = "Role_locations";
		$this->template->content = View::factory('role_locations/edit');

	}
	
	public function action_delete($id = null)
	{
		if ($role_location = Model_Role_Location::find($id))
		{
			$role_location->delete();
			
			Session::set_flash('notice', 'Deleted role_location #' . $id);
		}

		else
		{
			Session::set_flash('notice', 'Could not delete role_location #' . $id);
		}

		Response::redirect('role_locations');

	}
	
	
}

/* End of file role_locations.php */
