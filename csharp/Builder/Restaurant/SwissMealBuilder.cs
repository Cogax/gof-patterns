namespace Builder.Restaurant
{
	public class SwissMealBuilder : IMealBuilder
	{
		private Meal _meal;

		public SwissMealBuilder()
		{
			_meal = new Meal();
		}

		public IMealBuilder CookStarter()
		{
			_meal.Starter = "Some cheese as a starter.";
			return this;
		}

		public IMealBuilder CookEntree()
		{
			_meal.Entree = "A typically Fondue as an entree.";
			return this;
		}

		public IMealBuilder CookDessert()
		{
			_meal.Dessert = "A normal dessert to finish.";
			return this;
		}

		public Meal GetMeal()
		{
			return _meal;
		}
	}
}