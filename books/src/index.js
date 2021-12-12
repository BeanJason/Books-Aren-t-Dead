import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import {
  BrowserRouter,
  Routes,
  Route,
  Link
} from "react-router-dom";
import BooksPage from './routes/BooksPage'
import BooksDetail from './routes/BooksDetail';
import logo from './pic1.jpg';

ReactDOM.render(
  <BrowserRouter>
    <header>
      <h1>Books Aren't Dead!</h1>
      <img className="logo" src={logo} alt='logo'></img>
    </header>
    <nav className='topnav'>
      <ul>
        <li><a href="http://localhost/Books-Arent-Dead/index.php">Home</a></li>
        <li><Link to='/books'>New Releases</Link></li>
        <li><a href="http://localhost/Books-Arent-Dead/newsletter.php">Newsletter</a></li>
        <li><Link to='/books'>Best Sellers</Link></li>
        <li><a href="http://localhost/Books-Arent-Dead/recommend.php">Recommendations</a></li>
        <li><a href="http://localhost/Books-Arent-Dead/login.php">Login</a></li>
        <li><a href="http://localhost/Books-Arent-Dead/sign-up.php">sign-up</a></li>
      </ul>
    </nav>
    <div id="container">
      <Routes>
        <Route path="/books" element={<BooksPage />} />
        <Route path="/book/:id" element={<BooksDetail />} />
      </Routes>
    </div>
  </BrowserRouter >,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals