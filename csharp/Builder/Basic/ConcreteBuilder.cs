namespace Builder.Basic
{
	public class ConcreteBuilder : IBuilder
	{
		private Product _product;

		public void BuildPart()
		{
			_product = new Product();
		}

		public Product GetResult()
		{
			return _product;
		}
	}
}