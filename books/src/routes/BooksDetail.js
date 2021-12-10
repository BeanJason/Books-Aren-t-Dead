import React from 'react';
import {
	useParams
} from "react-router-dom";

export default function BooksDetail(props) {

	const { id } = useParams();

	return (
		<div className="books-detail">
			<h1>Book Detail</h1>
			<p>{id}</p>
		</div>
	);
}