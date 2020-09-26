const  api_url = "https://apps.des.qld.gov.au/species/"

async function getData() {
    const response = await fetch(api_url);
    const data = await response.json();
    console.log(data);
}

getData();