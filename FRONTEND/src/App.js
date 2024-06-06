import React, { useState, useEffect } from 'react';
import Header from "./components/Header";
import Phrase from "./components/Phrase";
import Footer from "./components/Footer";

const App = () => {
    cont [Phrase, setPhrase] = useState('');

    useEffect(() => {
        fetch('/BACKEND/public/api/phrases.json').then(response => response.json()).then(data => {
            const randomPhrase = data.phrase[Math.floor(Math.random() * data.phrases.length)];
            setPhrase(randomPhrase);
        });
    }, []);
    return (
        <div className='app'>
            <Header />
            <Phrase phrase={phrase} />
            <Footer />
        </div>
    );
}

export default App;