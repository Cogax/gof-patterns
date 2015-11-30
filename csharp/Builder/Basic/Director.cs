namespace Builder.Basic
{
	public class Director
	{
		public Product Construct()
		{
			ConcreteBuilder builder = new ConcreteBuilder();
			builder.BuildPart();
			return builder.GetResult();
		}
	}
}