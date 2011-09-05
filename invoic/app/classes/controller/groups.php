<?php
class Controller_Groups extends Controller_Template {
	
	public function action_index()
	{
		$data['groups'] = Model_Group::find('all');
		$this->template->title = "Groups";
		$this->template->content = View::factory('groups/index', $data);

	}
	
	public function action_view($id = null)
	{
		$data['group'] = Model_Group::find($id);
		
		$this->template->title = "Group";
		$this->template->content = View::factory('groups/view', $data);

	}
	
	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$group = Model_Group::factory(array(
				'parent_id' => Input::post('parent_id'),
				'name' => Input::post('name'),
			));

			if ($group and $group->save())
			{
				Session::set_flash('notice', 'Added group #' . $group->id . '.');

				Response::redirect('groups');
			}

			else
			{
				Session::set_flash('notice', 'Could not save group.');
			}
		}

		$this->template->title = "Groups";
		$this->template->content = View::factory('groups/create');

	}
	
	public function action_edit($id = null)
	{
		$group = Model_Group::find($id);

		if (Input::method() == 'POST')
		{
			$group->parent_id = Input::post('parent_id');
			$group->name = Input::post('name');

			if ($group->save())
			{
				Session::set_flash('notice', 'Updated group #' . $id);

				Response::redirect('groups');
			}

			else
			{
				Session::set_flash('notice', 'Could not update group #' . $id);
			}
		}
		
		else
		{
			$this->template->set_global('group', $group, false);
		}
		
		$this->template->title = "Groups";
		$this->template->content = View::factory('groups/edit');

	}
	
	public function action_delete($id = null)
	{
		if ($group = Model_Group::find($id))
		{
			$group->delete();
			
			Session::set_flash('notice', 'Deleted group #' . $id);
		}

		else
		{
			Session::set_flash('notice', 'Could not delete group #' . $id);
		}

		Response::redirect('groups');

	}
	
	
}

/* End of file groups.php */
