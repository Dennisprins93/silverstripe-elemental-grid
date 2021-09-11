import React from 'react';

const ColumnSizing = (Element) => (props) => {
  return (
    <div>
      <Element {...props} />
      { console.log(props.element.blockSchema) }
      <small>POEP</small>
    </div>
  )
}

export default ColumnSizing;
