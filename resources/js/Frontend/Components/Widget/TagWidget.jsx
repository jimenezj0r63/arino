import React from 'react'
import Div from '../Div'
import {Link} from "@inertiajs/react";

export default function TagWidget({title, data}) {
  return (
    <>
      <h4 className="cs-sidebar_widget_title">{title}</h4>
      <Div className="tagcloud">
        {data?.map((tag, index)=> (
          <Link href={tag.url} className="tag-cloud-link" key={index}>{tag.title}</Link>
        ))}
      </Div>
    </>
  )
}
