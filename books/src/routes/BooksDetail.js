
import './BooksDetail.css'
import { useEffect, useState } from 'react';
import {
	useParams
} from "react-router-dom";

export default function BooksDetail(props) {

	const { id } = useParams();
	const [details, setDetails] = useState({ isbn: id });

	useEffect(() => {
		const apiUrl = `http://localhost/Books-Arent-Dead/api/get_book.php?isbn=${id}`;
		fetch(apiUrl)
			.then((res) => res.json())
			.then((data) => {
				setDetails(data);
			});
	}, [setDetails, id]);

	return (
		<div className="books-detail">
			<img className="detail-cover" src={details.image_path} alt="book cover" />
			<div className="detail-content">
				<h2>{details.name}</h2>
				<p>By {details.author}</p>
				<p>{details.rating}/5 stars</p>
				<div className="prices">
					<h3>Price</h3>
					<form>
						<label htmlFor="hardcover">Hardcover Price: ${details.hardcover_price}</label>
						<input type="radio" id="hard_cover" name="price" value={details.hardcover_price}></input><br></br>
						<label htmlFor="paperback">Paperback Price: ${details.paperback_price}</label>
						<input type="radio" id="paperback" name="price" value={details.paperback_price}></input><br></br>
						<label htmlFor="kindle">Kindle Price: ${details.kindle_price}</label>
						<input type="radio" id="kindle" name="price" value={details.kindle_price}></input><br></br>
						<input type="submit" value="Add to Cart"></input>
					</form>
				</div>
				<h3>Overview</h3>
				<p>{details.overview}</p>
				<h3>Product Details</h3>
				<p>ISBN: {details.isbn}</p>
				<p>Publish Date: {details.publish_date}</p>
				<p>Pages: {details.page_number}</p>
			</div>
		</div>
	);
}