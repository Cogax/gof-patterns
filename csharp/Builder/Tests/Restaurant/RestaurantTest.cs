using System;
using Builder.Restaurant;
using NUnit.Framework;

namespace Builder.Tests.Restaurant
{
	[TestFixture]
	public class RestaurantTest
	{
		[Test]
		public void TestSwissRestaurant()
		{
			Builder.Restaurant.Restaurant restaurant = new Builder.Restaurant.Restaurant();
			IMealBuilder mealBuilder = new SwissMealBuilder();
			Meal meal = restaurant.Cook(mealBuilder);
			Assert.AreEqual("Some cheese as a starter.", meal.Starter);
			Assert.AreEqual("A typically Fondue as an entree.", meal.Entree);
			Assert.AreEqual("A normal dessert to finish.", meal.Dessert);
		}

		[Test]
		public void TestIndianRestaurant()
		{
			Builder.Restaurant.Restaurant restaurant = new Builder.Restaurant.Restaurant();
			IMealBuilder mealBuilder = new IndianMealBuilder();
			Meal meal = restaurant.Cook(mealBuilder);
			Assert.AreEqual("Some rise as a starter.", meal.Starter);
			Assert.AreEqual("Some rise as an entree.", meal.Entree);
			Assert.AreEqual("Some rise as a dessert.", meal.Dessert);
		}
	}
}