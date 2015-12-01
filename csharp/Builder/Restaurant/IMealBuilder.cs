namespace Builder.Restaurant
{
	public interface IMealBuilder
	{
		IMealBuilder CookStarter();

		IMealBuilder CookEntree();

		IMealBuilder CookDessert();

		Meal GetMeal();
	}
}