import Service from "@/Frontend/Components/Service/Service";
import Service2 from "@/Frontend/Components/Service/Service2";
import Service3 from "@/Frontend/Components/Service/Service3";
import Service4 from "@/Frontend/Components/Service/Service4";

export default function ServiceSection({sections_data}){
    const serviceSection = sections_data.service_section;
    let section = ""
    // conditional rendering
    if (serviceSection.layout === "1"){
        section = <Service service_data={serviceSection} />
    } else if(serviceSection.layout === "2"){
        section = <Service2 service_data={serviceSection} />
    } else if (serviceSection.layout === "3"){
        section = <Service3 service_data={serviceSection} />
    } else if(serviceSection.layout === "4"){
        section = <Service4 service_data={serviceSection} />
    }
    return(
        <>
            {section}
        </>
    )
}
