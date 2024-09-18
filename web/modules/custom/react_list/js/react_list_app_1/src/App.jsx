import React, { useEffect, useState } from "react";

const App = () => {
  const [nodes, setNodes] = useState([]);
  const [error, setError] = useState(null);

  useEffect(() => {
    fetch("/jsonapi/node/article")
      .then((response) => response.json())
      .then((data) => setNodes(data.data))
      .catch((error) => setError(error));
  }, []);

  if (error) {
    return <div>Error: {error.message}</div>;
  }

  return (
    <div>
      <h1>Article List</h1>
      <ul>
        {nodes.map((node) => (
          <li key={node.id}>
            <h2>{node.attributes.title}</h2>
            <p>{node.attributes.body.value}</p>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default App;