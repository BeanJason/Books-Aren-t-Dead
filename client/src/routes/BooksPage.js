import Book from '../components/Book';
import './BooksPage.css';

export default function BooksPage() {
	const url = "https://prodimage.images-bn.com/lf?set=key%5Bresolve.pixelRatio%5D,value%5B1%5D&set=key%5Bresolve.width%5D,value%5B300%5D&set=key%5Bresolve.height%5D,value%5B10000%5D&set=key%5Bresolve.imageFit%5D,value%5Bcontainerwidth%5D&set=key%5Bresolve.allowImageUpscaling%5D,value%5B0%5D&product=path%5B/pimages/9781523502196_p0_v10%5D&call=url%5Bfile:common/decodeProduct.chain%5D";
	const url2 = "https://prodimage.images-bn.com/lf?set=key%5Bresolve.pixelRatio%5D,value%5B1%5D&set=key%5Bresolve.width%5D,value%5B300%5D&set=key%5Bresolve.height%5D,value%5B10000%5D&set=key%5Bresolve.imageFit%5D,value%5Bcontainerwidth%5D&set=key%5Bresolve.allowImageUpscaling%5D,value%5B0%5D&product=path%5B/pimages/9780358086765_p0_v1%5D&call=url%5Bfile:common/decodeProduct.chain%5D";
	const url3 = "https://prodimage.images-bn.com/lf?set=key%5Bresolve.pixelRatio%5D,value%5B1%5D&set=key%5Bresolve.width%5D,value%5B300%5D&set=key%5Bresolve.height%5D,value%5B10000%5D&set=key%5Bresolve.imageFit%5D,value%5Bcontainerwidth%5D&set=key%5Bresolve.allowImageUpscaling%5D,value%5B0%5D&product=path%5B/pimages/9780593465066_p0_v5%5D&call=url%5Bfile:common/decodeProduct.chain%5D";
	const url4 = "https://images-na.ssl-images-amazon.com/images/I/51RY7+RDt+L._SX325_BO1,204,203,200_.jpg"
	return (
		<div className="books-page">
			<div className="genre-picker">
				<h1>Genres</h1>
				<p>Arts and Photos</p>
				<p>Business</p>
				<p>Romance</p>
				<p>Law</p>
				<p>History</p>
				<p>Fiction</p>
				<p>Non-Fiction</p>
				<p>Thriller</p>
			</div>

			<div className="book-gallery">
				<Book imgUrl={url} title="Book Title" author="Author" rating={1} />
				<Book imgUrl={url2} title="Book Title" author="Author" rating={3} />
				<Book imgUrl={url3} title="Book Title" author="Author" rating={2} />
				<Book imgUrl={url4} title="Book Title" author="Author" rating={1} />
				<Book imgUrl={url} title="Book Title" author="Author" rating={2} />
				<Book imgUrl={url2} title="Book Title" author="Author" rating={3} />
				<Book imgUrl={url} title="Book Title" author="Author" rating={4} />
				<Book imgUrl={url3} title="Book Title" author="Author" rating={5} />
				<Book imgUrl={url4} title="Book Title" author="Author" rating={3} />
				<Book imgUrl={url2} title="Book Title" author="Author" rating={2} />
			</div>
		</div>
	);
}