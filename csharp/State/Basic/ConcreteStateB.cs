using System;

namespace State.Basic
{
	public class ConcreteStateB : State
	{
		public override void Handle(Context context)
		{
			Console.WriteLine("STATE-B handling behavior..");
		}
	}
}