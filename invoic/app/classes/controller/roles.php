<?php
class Controller_Roles extends Controller_Template {

	public static $select = array();

	public function before()
	{
		parent::before();
		$groups = \Model_Group::find('all');
		static::$select['groups'][0] = 'No Group/Default';
		foreach ($groups as $group)
		{
			static::$select['groups'][$group->id] = $group->name;
		}
		$this->template->set_global('select', static::$select);
	}
	
	public function action_index()
	{
		$data['roles'] = Model_Role::find('all');
		foreach ($data['roles'] as $role)
		{
			if (array_key_exists($role->group_id, static::$select['groups']))
			{
				$role->group_id = static::$select['groups'][$role->group_id];
			}
		}
		$this->template->title = "Roles";
		$this->template->content = View::factory('roles/index', $data);

	}
	
	public function action_view($id = null)
	{
		$data['role'] = Model_Role::find($id);
		if (array_key_exists($data['role']->group_id, static::$select['groups']))
		{
			$data['role']->group_id = static::$select['groups'][$data['role']->group_id];
		}
		$this->template->title = "Role";
		$this->template->content = View::factory('roles/view', $data);

	}
	
	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$role = Model_Role::factory(array(
				'name' => Input::post('name'),
				'group_id' => Input::post('group_id'),
			));

			if ($role and $role->save())
			{
				Session::set_flash('notice', 'Added role #' . $role->id . '.');

				Response::redirect('roles');
			}

			else
			{
				Session::set_flash('notice', 'Could not save role.');
			}
		}

		$this->template->title = "Roles";
		$this->template->content = View::factory('roles/create');

	}
	
	public function action_edit($id = null)
	{
		$role = Model_Role::find($id);

		if (Input::method() == 'POST')
		{
			$role->name = Input::post('name');
			$role->group_id = Input::post('group_id');

			if ($role->save())
			{
				Session::set_flash('notice', 'Updated role #' . $id);

				Response::redirect('roles');
			}

			else
			{
				Session::set_flash('notice', 'Could not update role #' . $id);
			}
		}
		
		else
		{
			$this->template->set_global('role', $role, false);
		}
		
		$this->template->title = "Roles";
		$this->template->content = View::factory('roles/edit');

	}
	
	public function action_delete($id = null)
	{
		if ($role = Model_Role::find($id))
		{
			$role->delete();
			
			Session::set_flash('notice', 'Deleted role #' . $id);
		}

		else
		{
			Session::set_flash('notice', 'Could not delete role #' . $id);
		}

		Response::redirect('roles');

	}
	
	
}

/* End of file roles.php */
