import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Departamento extends Component {
    render() {
        return (
          <div class="container">

            <h3>Laravel y React APIRest</h3>
            <hr/>

            <table class="table table-bordered order-table ">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NOMBRE</th>
                </tr>
              </thead>
              <tbody id="bodytable">
                  <tr>
                    <td>id</td>
                    <td>nombre</td>
                  </tr>
              </tbody>
            </table>

          </div>
        );
    }
}

if (document.getElementById('departamento')) {
    ReactDOM.render(<Producto />, document.getElementById('departamento'));
}
