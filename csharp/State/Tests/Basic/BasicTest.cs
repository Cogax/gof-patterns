using NUnit.Framework;
using State.Basic;

namespace State.Tests.Basic
{
	[TestFixture]
	public class BasicTest
	{
		[Test]
		public void TestCompleteProcedure()
		{
			State.Basic.State stateA = new ConcreteStateA();
			Context context = new Context(stateA);
			context.Request();

			Assert.IsInstanceOf<ConcreteStateB>(context.State);
		}
	}
}