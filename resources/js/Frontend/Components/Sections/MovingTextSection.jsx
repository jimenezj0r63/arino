import MovingText from "@/Frontend/Components/MovingText/index.jsx";
export default function MovingTextSection({sections_data}){
    const movingText = sections_data.moving_text_section;
    return(
        <>
            <MovingText text={movingText.text} />
        </>
    )
}
