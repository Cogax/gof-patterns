namespace Builder.Restaurant
{
	public class Restaurant
	{
		public Meal Cook(IMealBuilder mealBuilder)
		{
			return mealBuilder.CookStarter().CookEntree().CookDessert().GetMeal();
		}
	}
}