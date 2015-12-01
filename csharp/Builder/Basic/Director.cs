namespace Builder.Basic
{
	public class Director
	{
		private readonly IBuilder _builder;

		public Director(IBuilder builder)
		{
			_builder = builder;
		}

		public Product Construct()
		{
			_builder.BuildPart();
			return _builder.GetResult();
		}
	}
}