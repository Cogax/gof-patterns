using Builder.Basic;
using NUnit.Framework;

namespace Builder.Tests.Basic
{
	[TestFixture]
	public class BasicTest
	{
		[Test]
		public void TestBuilder()
		{
			ConcreteBuilder builder = new ConcreteBuilder();
			Director director = new Director(builder);
			Assert.IsInstanceOf(typeof(Product), director.Construct());
		}
	}
}