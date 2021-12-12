import React, { useEffect, useState } from 'react';
import Book from '../components/Book';
import './BooksPage.css';

export default function BooksPage() {


	const [books, setBooks] = useState([]);

	useEffect(() => {
		const apiUrl = `http://localhost/Books-Arent-Dead/api/get_books.php`;
		fetch(apiUrl)
			.then((res) => res.json())
			.then((data) => {
				setBooks(data);
			});
	}, [setBooks]);

	const changeGenre = (genre) => {
		let apiUrl = `http://localhost/Books-Arent-Dead/api/get_books.php`;
		if (genre) {
			apiUrl = `http://localhost/Books-Arent-Dead/api/get_books.php?genre=${genre}`;
		}
		fetch(apiUrl)
			.then((res) => res.json())
			.then((data) => {
				setBooks(data);
			});
	};

	const getBookGallery = () => {
		if (books.length > 0) {
			return books.map(book => <Book key={book.isbn} isbn={book.isbn} imgUrl={book.image_path} title={book.name} author={book.author} rating={book.rating} />)
		}
		else {
			return (
				<p className="no-books">No books of this genre</p>
			)
		}
	};

	return (
		<div className="books-page">
			<div className="genre-picker">
				<h2>Genres</h2>
				<p onClick={() => changeGenre()}>All</p>
				<p onClick={() => changeGenre("arts")}>Arts and Photos</p>
				<p onClick={() => changeGenre("romance")}>Romance</p>
				<p onClick={() => changeGenre("law")}>Law</p>
				<p onClick={() => changeGenre("history")}>History</p>
				<p onClick={() => changeGenre("fiction")}>Fiction</p>
				<p onClick={() => changeGenre("nonfiction")}>Non-Fiction</p>
				<p onClick={() => changeGenre("thriller")}>Thriller</p>
			</div>

			<div className="book-gallery">
				{
					getBookGallery()
				}
			</div>
		</div>
	);
}