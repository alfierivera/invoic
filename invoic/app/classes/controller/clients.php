<?php
class Controller_Clients extends Controller_Template {
	
	public function action_index()
	{
		$data['clients'] = Model_Client::find('all');
		$this->template->title = "Clients";
		$this->template->content = View::factory('clients/index', $data);

	}
	
	public function action_view($id = null)
	{
		$data['client'] = Model_Client::find($id);
		
		$this->template->title = "Client";
		$this->template->content = View::factory('clients/view', $data);

	}
	
	public function action_create($id = null)
	{
		if (Input::method() == 'POST')
		{
			$client = Model_Client::factory(array(
				'name' => Input::post('name'),
				'identifier' => Input::post('identifier'),
				'phone' => Input::post('phone'),
				'fax' => Input::post('fax'),
				'website' => Input::post('website'),
				'email' => Input::post('email'),
				'street_1' => Input::post('street_1'),
				'street_2' => Input::post('street_2'),
				'city' => Input::post('city'),
				'province' => Input::post('province'),
				'country' => Input::post('country'),
				'notes' => Input::post('notes'),
				'priority' => Input::post('priority'),
				'language' => Input::post('language'),
				'type' => Input::post('type'),
			));

			if ($client and $client->save())
			{
				Session::set_flash('notice', 'Added client #' . $client->id . '.');

				Response::redirect('clients');
			}

			else
			{
				Session::set_flash('notice', 'Could not save client.');
			}
		}

		$this->template->title = "Clients";
		$this->template->content = View::factory('clients/create');

	}
	
	public function action_edit($id = null)
	{
		$client = Model_Client::find($id);

		if (Input::method() == 'POST')
		{
			$client->name = Input::post('name');
			$client->identifier = Input::post('identifier');
			$client->phone = Input::post('phone');
			$client->fax = Input::post('fax');
			$client->website = Input::post('website');
			$client->email = Input::post('email');
			$client->street_1 = Input::post('street_1');
			$client->street_2 = Input::post('street_2');
			$client->city = Input::post('city');
			$client->province = Input::post('province');
			$client->country = Input::post('country');
			$client->notes = Input::post('notes');
			$client->priority = Input::post('priority');
			$client->language = Input::post('language');
			$client->type = Input::post('type');

			if ($client->save())
			{
				Session::set_flash('notice', 'Updated client #' . $id);

				Response::redirect('clients');
			}

			else
			{
				Session::set_flash('notice', 'Could not update client #' . $id);
			}
		}
		
		else
		{
			$this->template->set_global('client', $client, false);
		}
		
		$this->template->title = "Clients";
		$this->template->content = View::factory('clients/edit');

	}
	
	public function action_delete($id = null)
	{
		if ($client = Model_Client::find($id))
		{
			$client->delete();
			
			Session::set_flash('notice', 'Deleted client #' . $id);
		}

		else
		{
			Session::set_flash('notice', 'Could not delete client #' . $id);
		}

		Response::redirect('clients');

	}
	
	
}

/* End of file clients.php */
