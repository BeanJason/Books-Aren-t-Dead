import './Book.css'
import { Link } from "react-router-dom";


export default function Book(props) {
	return (
		<div className="book">
			<Link to={`/book/${props.isbn}`}>
				<img className="book-cover" src={props.imgUrl} alt="book cover" />
				<div className="book-text">
					<p>{props.title}</p>
					<p>By {props.author}</p>
					<p>{props.rating}/5</p>
				</div>
			</Link>
		</div>
	);
}