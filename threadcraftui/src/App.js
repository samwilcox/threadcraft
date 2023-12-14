import {BrowserRouter as Router, Routes, Route} from 'react-router-dom';
import './App.css';
import {Test} from "./Test";

function App() {
  return (
    <div className="App">
      <Router>
        <Routes>
          <Route path="/test" element={<Test/>}/>
        </Routes>
      </Router>
    </div>
  );
}

export default App;
