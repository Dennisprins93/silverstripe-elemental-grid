import React from 'react';

const ColumnSizing = (Element) => (props) => {
  return (
    <div class="col-md-8">
      <Element {...props} />
      { console.log(props.element.blockSchema) }
      <small>Column width: { props.element.blockSchema.ColWidth }</small>
    </div>
  )
}

export default ColumnSizing;
