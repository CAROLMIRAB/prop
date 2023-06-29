import React, { createContext, useState } from 'react';
import Home from './pages/home';
import './App.css';

export const GlobalContext = createContext({});

function App() {
  const [allProject, setAllProject] = useState([]);

  return (
    <GlobalContext.Provider value={{ allProject, setAllProject }}>
      <Home />
    </GlobalContext.Provider>
  );
}

export default App;
