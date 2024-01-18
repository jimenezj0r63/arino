import React, {useState} from "react";
import SpacingCustomize from "@/Admin/Components/PageCustomize/SpacingCustomize";

export default function TestimonialCustomize({currentSection, spacingCallback}){
    const [tab, setTab] = useState('general');
    return(
        <>
            <ul className="nav nav-tabs mb-3">
                <li className="nav-item" onClick={() => setTab('general')} style={{cursor: "pointer"}}>
                    <span className={`nav-link ${tab === "general" && "active"}`}>General</span>
                </li>
                <li className="nav-item" onClick={() => setTab('spacing')} style={{cursor: "pointer"}}>
                    <span className={`nav-link ${tab === "spacing" && "active"}`}>Spacing</span>
                </li>
            </ul>
            {tab === "general" ? (
                <></>
            ) : (
                <SpacingCustomize spacingCallback={spacingCallback} currentSection={currentSection} />
            )}
        </>
    )
}
