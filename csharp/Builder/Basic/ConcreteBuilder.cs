namespace Builder.Basic
{
	public class ConcreteBuilder : IBuilder
	{
		private readonly Product _product; 

		public ConcreteBuilder()
		{
			_product = new Product();
		}

		public void BuildPart()
		{
			// configure product
		}

		public Product GetResult()
		{
			return _product;
		}
	}
}