import { deleteData, getData, getSingleData, postData, putData } from "../plugins/api";

export async function AllDonate(){
    return await getData('/donates').then(res=>{
        return res.data
    })
}

export async function singleDonate(id) {
    return await getSingleData('/donates/'+id).then(res=>{
        return res.data
    })
}

export async function deleteDonate(id) {
    return await deleteData('/deletedonates/'+id).then(res=>{
        return res.data
    })
}