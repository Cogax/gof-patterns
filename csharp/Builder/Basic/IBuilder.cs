namespace Builder.Basic
{
	public interface IBuilder
	{
		void BuildPart();

		Product GetResult();
	}
}