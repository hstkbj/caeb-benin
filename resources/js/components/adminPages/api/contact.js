import { deleteData, getData, getSingleData, postData, putData } from "../plugins/api";

export async function AllContact(){
    return await getData('/contacts').then(res=>{
        return res.data.data
    })
}

export async function singleContact(id) {
    return await getSingleData('/contact/'+id).then(res=>{
        return res.data.data
    })
}

export async function postContact(data) {
    return await postData('/addevents',data).then(res=>{
        return res.data.event
    })
}

export async function deleteContact(id) {
    return await deleteData('/deletecontact/'+id).then(res=>{
        return res.data
    })
}