<?php
class Controller_Rights extends Controller_Template {

	public static $select = array();
	
	public function before()
	{
		parent::before();
		$locations = \Model_Location::find('all');
		foreach ($locations as $location)
		{
			static::$select['locations'][$location->id] = $location->name;
		}
		static::$select['options'] = array(
			'0' => 'No',
			'1' => 'Yes',
		);
		$this->template->set_global('select', static::$select);
	}
	
	public function action_index()
	{
		$data['rights'] = Model_Right::find('all');
		foreach ($data['rights'] as $right)
		{
			if (array_key_exists($right->role_location_id, static::$select['locations']))
			{
				$right->role_location_id = static::$select['locations'][$right->role_location_id];
			}
			$right->create = static::$select['options'][$right->create];
			$right->read = static::$select['options'][$right->read];
			$right->update = static::$select['options'][$right->update];
			$right->delete = static::$select['options'][$right->delete];
		}
		$this->template->title = "Rights";
		$this->template->content = View::factory('rights/index', $data);

	}
	
	public function action_view($id = null)
	{
		$data['right'] = Model_Right::find($id);
		if (array_key_exists($data['right']->role_location_id, static::$select['locations']))
		{
			$data['right']->role_location_id = static::$select['locations'][$data['right']->role_location_id];
		}
		$data['right']->create = static::$select['options'][$data['right']->create];
		$data['right']->read = static::$select['options'][$data['right']->read];
		$data['right']->update = static::$select['options'][$data['right']->update];
		$data['right']->delete = static::$select['options'][$data['right']->delete];
		$this->template->title = "Right";
		$this->template->content = View::factory('rights/view', $data);

	}
	
	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$right = Model_Right::factory(array(
				'role_location_id' => Input::post('role_location_id'),
				'create' => Input::post('create'),
				'read' => Input::post('read'),
				'update' => Input::post('update'),
				'delete' => Input::post('delete'),
			));

			if ($right and $right->save())
			{
				Session::set_flash('notice', 'Added right #' . $right->id . '.');

				Response::redirect('rights');
			}

			else
			{
				Session::set_flash('notice', 'Could not save right.');
			}
		}

		$this->template->title = "Rights";
		$this->template->content = View::factory('rights/create');

	}
	
	public function action_edit($id = null)
	{
		$right = Model_Right::find($id);

		if (Input::method() == 'POST')
		{
			$right->role_location_id = Input::post('role_location_id');
			$right->create = Input::post('create');
			$right->read = Input::post('read');
			$right->update = Input::post('update');
			$right->delete = Input::post('delete');

			if ($right->save())
			{
				Session::set_flash('notice', 'Updated right #' . $id);

				Response::redirect('rights');
			}

			else
			{
				Session::set_flash('notice', 'Could not update right #' . $id);
			}
		}
		
		else
		{
			$this->template->set_global('right', $right, false);
		}
		
		$this->template->title = "Rights";
		$this->template->content = View::factory('rights/edit');

	}
	
	public function action_delete($id = null)
	{
		if ($right = Model_Right::find($id))
		{
			$right->delete();
			
			Session::set_flash('notice', 'Deleted right #' . $id);
		}

		else
		{
			Session::set_flash('notice', 'Could not delete right #' . $id);
		}

		Response::redirect('rights');

	}
	
	
}

/* End of file rights.php */
