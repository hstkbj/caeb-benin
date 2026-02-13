import { deleteData, getData, getSingleData, postData, putData } from "../plugins/api";

export async function AllRoles(){
    return await getData('/roles').then(res=>{
        return res.data.role
    })
}

export async function singleRole(id) {
    return await getSingleData('/role/'+id).then(res=>{
        return res.data.data
    })
}

export async function postRole(data) {
    return await postData('/addrole',data).then(res=>{
        return res.data.data
    })
}

export async function updateRole(id,data) {
    return await putData('/updaterole/'+id,data).then(res=>{
        return res.data.data
    })
}

export async function deleteRole(id) {
    return await deleteData('/deleterole/'+id).then(res=>{
        return res.data.data
    })
}