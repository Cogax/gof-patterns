using System;

namespace State.Basic
{
	public abstract class State
	{
		public virtual void Handle(Context context)
		{
		}
	}
}