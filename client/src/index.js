import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import {
  BrowserRouter,
  Routes,
  Route,
  Link
} from "react-router-dom";
import Books from './routes/BooksPage'

ReactDOM.render(
  <BrowserRouter>
    <nav id='topnav'>
      <Link to='/'>App</Link>
      <Link to='/Books'>Books</Link>
      <Link to='/Blog'>Blog</Link>
    </nav>
    <div id="container">
      <Routes>
        <Route path="/" element={<App />} />
        <Route path="/Books" element={<Books />} />
      </Routes>
    </div>
  </BrowserRouter>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals