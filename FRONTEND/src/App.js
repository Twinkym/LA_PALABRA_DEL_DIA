import React, { useState, useEffect } from 'react';
import Header from "./components/Header";
import Phrase from "./components/Phrase";
import Footer from "./components/Footer";

const App = () => {
    cont [Phrase, setPhrase] = useState('');

    /* bloque catch para manejar errores que puedan ocurrir durante la petición de red.
    Esto evita que la aplicación se rompa inesperadamente y permite mostrar un mensaje 
    o comportamiento alternativo en caso de error. */
    useEffect(() => {
        fetch('/BACKEND/public/api/phrases.json').then(response => response.json()).then(data => {
            const randomPhrase = data.phrase[Math.floor(Math.random() * data.phrases.length)];
            setPhrase(randomPhrase);
        }).catch(error => {
            console.error('Error fetching data: ', error);
            setPhrase('Failed to load phrase');
        });
    }, []);

    return (
        <div>
            <Header />
            <Phrase phrase={phrase} />
            <Footer />
        </div>
    );
}

export default App;