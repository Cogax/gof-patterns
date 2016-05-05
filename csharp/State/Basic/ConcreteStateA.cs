using System;

namespace State.Basic
{
	public class ConcreteStateA : State
	{
		public override void Handle(Context context)
		{
			Console.WriteLine("STATE-A handling behavior..");
			Console.WriteLine("Switch to state B..");
			context.State = new ConcreteStateB();
		}
	}
}