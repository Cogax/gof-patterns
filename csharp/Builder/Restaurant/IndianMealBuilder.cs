namespace Builder.Restaurant
{
	public class IndianMealBuilder : IMealBuilder
	{
		private Meal _meal;

		public IndianMealBuilder()
		{
			_meal = new Meal();
		}

		public IMealBuilder CookStarter()
		{
			_meal.Starter = "Some rise as a starter.";
			return this;
		}

		public IMealBuilder CookEntree()
		{
			_meal.Entree = "Some rise as an entree.";
			return this;
		}

		public IMealBuilder CookDessert()
		{
			_meal.Dessert = "Some rise as a dessert.";
			return this;
		}

		public Meal GetMeal()
		{
			return _meal;
		}
	}
}