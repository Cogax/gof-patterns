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
			Director director = new Director();
			Assert.IsInstanceOf(typeof(Product), director.Construct());
		}
	}
}