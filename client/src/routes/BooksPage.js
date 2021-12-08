import Book from '../components/Book';
import './BooksPage.css';

export default function BooksPage() {
	const books = [
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/51KvAoff+ZL._SX407_BO1,204,203,200_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 2
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/41Xi50NeleL._SX218_BO1,204,203,200_QL40_FMwebp_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 3
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/51RY7+RDt+L._SX325_BO1,204,203,200_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 1
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/51uf17CjFMS._SY291_BO1,204,203,200_QL40_FMwebp_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 4
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/51KvAoff+ZL._SX407_BO1,204,203,200_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 5
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/41Xi50NeleL._SX218_BO1,204,203,200_QL40_FMwebp_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 3
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/51RY7+RDt+L._SX325_BO1,204,203,200_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 3
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/51uf17CjFMS._SY291_BO1,204,203,200_QL40_FMwebp_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 4
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/51KvAoff+ZL._SX407_BO1,204,203,200_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 3
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/41Xi50NeleL._SX218_BO1,204,203,200_QL40_FMwebp_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 2.1
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/51RY7+RDt+L._SX325_BO1,204,203,200_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 3.7
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/51uf17CjFMS._SY291_BO1,204,203,200_QL40_FMwebp_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 4.5
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/51KvAoff+ZL._SX407_BO1,204,203,200_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 5
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/41Xi50NeleL._SX218_BO1,204,203,200_QL40_FMwebp_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 1.2
		},
		{
			url: "https://images-na.ssl-images-amazon.com/images/I/51RY7+RDt+L._SX325_BO1,204,203,200_.jpg",
			title: "Book1",
			author: "Author1",
			rating: 5
		}
	];

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
				{
					books.map((book) => <Book imgUrl={book.url} title={book.title} author={book.author} rating={book.rating} />)
				}
			</div>
		</div>
	);
}