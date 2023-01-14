import React from 'react';
import ReactDOM from 'react-dom';
import Graph from './Graph.js';

const sampleData = [
    {
        name: 'Page A',
        pv: 2400,
        uv: 1000,
    },
    {
        name: 'Page B',
        pv: 1398,
        uv: 800,
    },
    {
        name: 'Page C',
        pv: 9800,
        uv: 2000,
    },
    {
        name: 'Page D',
        pv: 3908,
        uv: 800,
    },
    {
        name: 'Page E',
        pv: 4800,
        uv: 1200,
    },
    {
        name: 'Page F',
        pv: 3800,
        uv: 800,
    },
    {
        name: 'Page G',
        pv: 4300,
        uv: 1700,
    },
];

ReactDOM.render(<Graph data={sampleData} />, document.getElementById('react-dashboard-widget'));
