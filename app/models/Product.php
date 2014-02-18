<?php

class Product extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('');
	
	protected $fillable = array('title', 'content', 'lang');

	/**
	 * Get the unique identifier for the product.
	 *
	 * @return mixed
	 */
	public function getId()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	/*public function getAuthPassword()
	{
		return $this->password;
	}*/

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	/*public function getReminderEmail()
	{
		return $this->email;
	}*/

}