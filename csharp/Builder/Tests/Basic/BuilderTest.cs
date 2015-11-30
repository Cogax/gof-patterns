using Builder.Basic;
using NUnit.Framework;

namespace Builder.Tests.Basic
{
	[TestFixture]
	public class BuilderTest
	{
		[Test]
		public void TestBuilder()
		{
			IBuilder builder = new ConcreteBuilder();
			Director director = new Director(builder);
			Assert.IsInstanceOf(typeof(Product), director.Construct());
		}
	}
}