class Pizza{

	/**
	 * Creates a new pizza
	 * @param  {Number} id   The ID of the pizza
	 * @param  {String} name The name of the pizza
	 */
	constructor(id, name) {
		/**
		 * The ID of the pizza
		 * @type {Number}
		 */
		this.id = id;
		/**
		 * The name of the pizza
		 * @type {String}
		 */
		this.name = name;
	}

	/**
	 * Gets the name of the pizza
	 * @return {String} The name
	 */
	getName() 
	{
		return this.name;
	}

	/**
	 * Gets the ID of the pizza
	 * @return {Number}
	 */
	getId() 
	{
		return this.id;
	}

	/**
	 * Gets all Pizzas
	 */
	getAll()
	{
		
	}

}

module.exports = Pizza;