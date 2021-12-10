import './Book.css'

export default function Book(props) {
	return (
		<div className="book">
			<img className="book-cover" src={props.imgUrl} alt="book cover" />
			<div className="book-text">
				<p>{props.title}</p>
				<p>By {props.author}</p>
				<p>{props.rating}/5</p>
			</div>
		</div>
	);
}