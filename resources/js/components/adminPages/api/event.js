import { deleteData, getData, getSingleData, postData, putData } from "../plugins/api";

export async function AllEvents(){
    return await getData('/events').then(res=>{
        return res.data
    })
}

export async function singleEvent(id) {
    return await getSingleData('/events/'+id).then(res=>{
        return res.data
    })
}

export async function postEvent(data) {
    return await postData('/addevents',data).then(res=>{
        return res.data.event
    })
}

export async function updateEvent(id,data) {
    return await putData('/udateevents/'+id,data).then(res=>{
        return res.data.event
    })
}

export async function deleteEvent(id) {
    return await deleteData('/deleteevents/'+id).then(res=>{
        return res.data
    })
}